App.Router.map(function() {
  this.resource('test', { path: '/' });
});

App.IndexRoute = Ember.Route.extend({
  
  model: function() {
    return ['red', 'yellow', 'blue'];
  }
});
