<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<title>MyResume</title>
<link rel="stylesheet"  type="text/css" href="{{asset('css/resumeone.css')}}">--}}
<style type="text/css" media="all">
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,100;1,300;1,900&display=swap');
/*css reset*/
body{
    margin: 0px;
    padding:0px;

}
/*
h2 {
    color: blue;
    font-size: 30px;
    font-family: 'Roboto', sans-serif;
    }
h1{
    color: coral;
    font-size: 35px;
    text-align: center;

}
.heading
{
    font-size:1.8rem;
 font-weight:700;
 text-transform:uppercase;
 padding:.5rem;
 line-height:1;
 margin:0;
 margin-top:2.5rem;
 position:relative;
 z-index:10
    

} 
*/
.resume
{   width: 800px;
    height: auto;
    display: flex;
    margin:50px auto;
    background-color: thistle;
}

 .bold{
    margin: 0 250px;
    font-weight: 700;
     font-size: 20px;
     text-transform: uppercase;
 }
 .semi-bold{
     font-weight: 500;
     font-size: 16px;

 }
 .resume .resume_left .resume_content{
     padding: 0 25px;
     
 }

 #resume_title{
    padding: 0 200px;
      display: flex;
      text-transform: uppercase;
      font-size:25px;
      font-weight: bold;

 }

.address {
    display: block;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: bold;
    font-family: 'Roboto', sans-serif;
}

.summary{
    font-weight: lighter;
}
.card-title{
    font-weight: lighter;

}

.title{
background-color: lightblue;
}

</style>
</head>
<body>
<div class="resume">
    <div class="resume_left">
        <div class="resume_profile">

        </div>
        <div class="resume_content">
            <div class="resume_item resume_info">
                <div class="title_main"id="maintitle">
                    <p class="resume_title" id="resume_title"> {{$user->details->fullname}}</p>
                    {{--<p class="regular">Lecturer</p>--}}
<p class ="address">
   <span>{{$user->details->address}} </span>
   <br> <span>{{$user->details->emailid}}</span>
    <br><span>{{$user->details->phone}}</span>
     </p>
<div class="resume_item resume_skills">
    <div class="title">
        <p class="bold">Objective</p>
    </div>
    <section class="summary">
        <strong><p>{{$user->details->summary}}</p></strong>
   </section>
</div>

            <div class="resume_item resume_skills">
                <div class="title">
                    <p class="bold">Skills</p>
                </div>
                <section class="Skill">

                    @foreach($user->skills as $e)
            
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> {{$e->name}}  ({{$e->rating}} out of 5)  </h4>
                    
                        </div>
                    </div>
                    
                    
                    
                    
                    @endforeach
            
                </section>
            
            </div>
            <div class="resume_item resume_skills">
                <div class="title">
                    <p class="bold">Education Detail</p>
                </div>
                <section class="Education">
                                        @foreach($user->education as $e)
            
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> {{$e->degree}} {{$e->school_name}} ({{$e->graduation_start_date}} -
                                {{$e->graduation_end_date}})</h4>
                        </div>
                    </div>
                    @endforeach
                    
            
                </section>
            
            </div>

        </div>
    </div>
    <div class="resume_left"></div>
</div>
</body>
</html>