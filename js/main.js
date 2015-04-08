$('#intro a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});


$('a[data-toggle="tab"]').on('shown.bs.tab', function(){
	skrollr.get().refresh('.tab-content');
})