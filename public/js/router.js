App.Router.map(function() {
  this.resource('adamtest', { path: '/' });
});

App.IndexRoute = Ember.Route.extend({
  
  model: function() {
    return ['red', 'yellow', 'blue'];
  }
});
