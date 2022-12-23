<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Applied Jobs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <style>
        body{
            background: #eee;
        }

        .box-part{
            background:#FFF;
            border-radius:5%;
            padding:2rem 1rem;
            margin:2rem 0;
        }
        .text{
            margin:2rem 0;
        }

        .fa{
            color:#4183D7;
        }
        </style>
        </head>

  
    <body>
        {{-- navbar --}}
        <x-navbar/>

        <div class="container" style="margin-top: 4rem;">
                <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
                    <span style="font-size: 2rem;">Applied Jobs</span>
                </header>

        </div>
        

        <main>
            <div class="box">
                <div class="container">
                    <div class="row d-flex flex-wrap justify-content-center" >
                        
                            <x-applied-job-card jobName="Architect & Designer" dateOfApplication="12/09/2021" img="/imgs/microsoft.png"/>
                            <x-applied-job-card jobName="Architect & Designer" dateOfApplication="12/09/2021" img="/imgs/google.png"/>
                            <x-applied-job-card jobName="Architect & Designer" dateOfApplication="12/09/2021" img="/imgs/amazon.png"/>
                            <x-applied-job-card jobName="Architect & Designer" dateOfApplication="12/09/2021" img="/imgs/apple.png"/>
                            <x-applied-job-card jobName="Architect & Designer" dateOfApplication="12/09/2021" img="/imgs/google.png"/>
                            <x-applied-job-card jobName="Architect & Designer" dateOfApplication="12/09/2021" img="/imgs/microsoft.png"/>
                            <x-applied-job-card jobName="Architect & Designer" dateOfApplication="12/09/2021" img="/imgs/amazon.png"/>
                            <x-applied-job-card jobName="Graphics Designer" dateOfApplication="12/09/2021" img="/imgs/apple.png"/>
                    
                    </div>		
                </div>
            </div>
        </main>

        {{-- footer --}}
        <x-footer/>

    </body>

</html>

