var checkboxFilter = {
  // Declare any variables we will need as properties of the object
  $filters: null,
  groups: [],
  outputArray: [],
  outputString: '',
  
  // The "init" method will run on document ready and cache any jQuery objects we will need.
  init: function(){
    var self = this;

    self.$filters = $('#mixfilter');
    self.$container = $('#mixcontainer');
    
    self.$filters.find('.controls').each(function(){
      self.groups.push({
        $inputs: $(this).find('input'),
        active: [],
        tracker: false
      });
    });

    self.$filters.on('change', function(){
      // loop through each filter group and add active filters to arrays
      for(var i = 0, group; group = self.groups[i]; i++){
        group.active = []; // reset arrays
        group.$inputs.each(function(){ 
          $(this).is(':checked') && group.active.push(this.value);
        });
        group.active.length && (group.tracker = 0);
      }
      
      self.concatenate();
    });
  },

  // The "concatenate" method will crawl through each group, concatenating filters as desired:
  concatenate: function(){
    var self = this,
      cache = '',
      crawled = false,
      checkTrackers = function(){
        var done = 0;
        
        for(var i = 0, group; group = self.groups[i]; i++){
          (group.tracker === false) && done++;
        }

        return (done < self.groups.length);
      },
      crawl = function(){
        for(var i = 0, group; group = self.groups[i]; i++){
          group.active[group.tracker] && (cache += group.active[group.tracker]);

          if(i === self.groups.length - 1){
            self.outputArray.push(cache);
            cache = '';
            updateTrackers();
          }
        }
      },
      updateTrackers = function(){
        for(var i = self.groups.length - 1; i > -1; i--){
          var group = self.groups[i];

          if(group.active[group.tracker + 1]){
            group.tracker++; 
            break;
          } else if(i > 0){
            group.tracker && (group.tracker = 0);
          } else {
            crawled = true;
          }
        }
      };
    
    self.outputArray = []; // reset output array

    do{
      crawl();
    }
    while(!crawled && checkTrackers());

    self.outputString = self.outputArray.join();
    
    // If the output string is empty, show all rather than none:
    !self.outputString.length && (self.outputString = 'all'); 

    // Send the output string to MixItUp via the 'filter' method:
    if(self.$container.mixItUp('isLoaded')){
      self.$container.mixItUp('filter', self.outputString);
    }
  }
};
  
// On document ready, initialise our code.
$(function(){
  // Initialize checkboxFilter code
  checkboxFilter.init();
      
  // Instantiate MixItUp
  $('#mixcontainer').mixItUp({
    controls: {
      enable: false // we won't be needing these
    },
    layout: { display:'block' },
    animation: { effects: 'fade rotateY' }
  });
  
  // Clear all other checkboxes when "ALL" is checked
  $('#r-all').click(function() {
    $('input[type=checkbox][name=control]').prop('checked', false);
  });
  $('#ra-all').click(function() {
    $('input[type=checkbox][name=area]').prop('checked', false);
  });
  
  // Clear the "ALL" checkbox when any other is checked
  $('input[type=checkbox][name=control]').click(function() {
    $('#r-all').prop('checked', false);
    if (!$('input[type=checkbox][name=control]:checked').length) $('#r-all').prop('checked', true);
  });
  $('input[type=checkbox][name=area]').click(function() {
    $('#ra-all').prop('checked', false);
    if (!$('input[type=checkbox][name=area]:checked').length) $('#ra-all').prop('checked', true);
  });
});
