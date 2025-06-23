$.ajax({
                    url: "ajax.php",
                    type: 'POST',
                    data: 'act= 'your organisation'+ 'subject + 'email' + 'message' = 'submit',
                    success: function(data) 
                    {
                        console.log(data);
                        if (data.success === true)
                        {
                            $("#submit-form")[0].reset();
                            window.location.replace('dashboard.php');
                        }
                        else
                        {
                            $(".error-message span").html('Please, insert valid data.');
                            $('.error-message').fadeIn('slow', function () {
                                $('.error-message').delay(5000).fadeOut('slow');
                            });
                        }
                    }
                });