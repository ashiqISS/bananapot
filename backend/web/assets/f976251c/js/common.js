$(document).on('ready pjax:success', function() {   
$('#create_admin').on('click',function(e){   
    
	var url  = basepath + '/users-admin/create';       
        $('#userAdminModal').modal('show')
             .find('.modal-content')
             .load(url);	
});
});
<<<<<<< HEAD
=======

$(document).on('ready pjax:success', function() { 
$('.update').click(function(e){
       e.preventDefault();
       $('#userAdminModal').modal('show')
                  .find('.modal-content')
                  .load($(this).attr('href'));
   });
});
>>>>>>> origin/develop-1.0
