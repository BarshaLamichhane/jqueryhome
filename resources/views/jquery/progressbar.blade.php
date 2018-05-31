<!DOCTYPE html>
<html>
<head>
    <title>Progressbar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://unpkg.com/sweetalert2@7.20.7/dist/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#outerdiv').css("position","relative")
                          .css('background-color','white')
                          .css('border','2px solid #EEEEEE')
                          .css("height","40px")
                          .css("width","500px")
                          .css("border-radius","0px")
                          .css("margin-top","20px");
            $('#innerdiv') .css("position","relative")
                            .css('background-color','green')
                           .css("height","20px")
                           .css("border-radius","1px")
                           .css("width","0px")
                           .css("margin-top","8px");
            $('#text').css("position","relative")
                        .css("margin-top","30px")
                        
            
            var widthadd=$('#innerdiv').width();
            
            $("button").click(function(){
                var percentage=$('#percentage').val();
                widthadd=(percentage*500)/100;
                $("#innerdiv").animate({width:$("#innerdiv").width(widthadd)},5000);
                $("#text").html(percentage+ " % completed");
                //$("#innerdiv").width(widthadd);
               if(percentage==100){
                   swal({title:'congratulations', text:'your progress bar is completed'}).then((result) => {
                        if (result.value) {

                        location.reload(true);
                        }
                    });
                }
               
             });
             

                          
                           
           
            
           
        });       
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <button type="button" class="btn btn-success" value="Animate">Animate</button>
            <select class="selectpicker" id="percentage">
                <optgroup label="Effect">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                    <option value="80">80</option>
                    <option value="90">90</option>
                    <option value="100">100</option>
                </optgroup>
            </select>
            <div class="progress" id="outerdiv">
                <div class="progress-bar progress-bar-striped progress-bar-animated" id="innerdiv" ></div>
            </div>
            <div id="text" class="text-center"></div>
        </div>   
    </div>
</body>
</html>
