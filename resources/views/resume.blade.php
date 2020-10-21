<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
</head>
<body>
    <h2>Resume</h2>
    <section class="heading">
        <h2>        {{$user->details->fullname}}</h2>
        
<p>Email:   {{$user->details->emailid}}</p>
<p>Phone:   {{$user->details->phone}}</p>
<p>Address:   {{$user->details->address}}</p>
        
    </section>
    <section class="summary">
        <h2>Summary</h2>
        <strong><p>{{$user->details->summary}}</p></strong>
    
    </section>

    <section class="Education">
        <h2>Education Detail</h2>
        @foreach($user->education as $e)

        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> {{$e->degree}} {{$e->school_name}} ({{$e->graduation_start_date}} -
                    {{$e->graduation_end_date}})</h4>
        
              
            </div>
        </div>
        @endforeach
        

    </section>
    <section class="Work"></section>
    <section class="Skill">
        <h2>Skills</h2>
        @foreach($user->skills as $e)

        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> {{$e->name}}  ({{$e->rating}} out of 5)  </h4>
        
            </div>
        </div>
        
        
        
        
        @endforeach

    </section>
    
    
    
</body>
</html>