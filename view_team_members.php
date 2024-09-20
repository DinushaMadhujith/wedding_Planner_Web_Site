<html>  
    <head>  
        <title>View Team Members</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
        <!-- include jquery js -->
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

        <!-- include bootstrap js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    </head>  
    <body>  
        <div class="container">  
            <br />  
            <br />
         <br />
         <div class="table-responsive">  
            <h3 align="center">Team Members</h3><br />
            <span id="result"></span>
            <div id="live_data"></div>                 
         </div>  
      </div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
            $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var name = $('#name').text();  
        var email = $('#email').text(); 
        var address = $('#address').text();
        var p_number = $('#p_number').text();
        var posision = $('#posision').text(); 
        var job = $('#job').text();    
        if(name == '')  
        {  
            alert("Enter Name");  
            return false;  
        }  
        if(email == '')  
        {  
            alert("Enter email");  
            return false;  
        }  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{name:name, email:email, address:address, p_number:p_number, posision:posision, job:job},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });
    function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
                $('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }

    $(document).on('blur', '.name', function(){  
        var id = $(this).data("id1");  
        var name = $(this).text();  
        edit_data(id, name, "name");  
    });  
    $(document).on('blur', '.email', function(){  
        var id = $(this).data("id2");  
        var email = $(this).text();  
        edit_data(id,email, "email");  
    });  

    $(document).on('blur', '.address', function(){  
        var id = $(this).data("id3");  
        var address = $(this).text();  
        edit_data(id, address, "address");  
    });

    $(document).on('blur', '.p_number', function(){  
        var id = $(this).data("id4");  
        var p_number = $(this).text();  
        edit_data(id, p_number, "p_number");  
    });

    $(document).on('blur', '.posision', function(){  
        var id = $(this).data("id5");  
        var posision = $(this).text();  
        edit_data(id, posision, "posision");  
    });

    $(document).on('blur', '.job', function(){  
        var id = $(this).data("id6");  
        var job = $(this).text();  
        edit_data(id, job, "job");  
    });



    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id7");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
}); 

</script>
