$(document).ready(function(){
    $('#uploadSubmit').click(function(event){
         console.log("Hello");
        if($('#img').val())
        {
            event.preventDefault();
            $('#loader-icon').show();
            $('#targetLayer').hide();
            $(this).ajaxSubmit({
                target: '#targetLayer',
                url:'upload.php',
                //method:'post',
                beforeSubmit:function(){
                    $('.progress-bar').width('50%');
                },
                uploadProgress: function(event, position, total, percentageComplete)
                {
                    $('.progress-bar').animate({
                        width: percentageComplete + '%'
                    }, {
                        duration: 1000
                    });
                },
                success:function(){
                    $('#loader-icon').hide();
                    $('#targetLayer').show();
                },
                resetForm: true
            });
        }
        return false;
    });
});