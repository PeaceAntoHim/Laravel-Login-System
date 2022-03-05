@extends('layouts.main')
@section('container')
    <h1 class="mb-5 d-flex justify-content-center">About Page</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200"class="img-thumbnail rounded-circle float-sm-start">

    <div class="row">
        <div class="col-sm-6 text-left">
          <p class="pKiri">
            Welcome to my portfolio, here I want
            share how i love technology
            computer. First of all, I am very interested in programming technology in high school. When I was 16 years old and I learned basic html, css, bootstrap to improve my skills.
            <br><br>
            I'm also very interested in AI and big data how can I create some IoT and create a company. But that was way before. Forthrough that i have to study harder than now because if i want to make that dream come true
            I have to start from now. First I want to make some applications to solve problems in society. And i want to win hackthon than I have a lot of experience.
            <br><br>
            In this portfolio website i want to show you the projects i have worked on. So you can see each project and technology i use i also want to give you a link to see the website i have made
            thank you for visiting my web I hope you can be inspired or you can give me some suggestions below so I
            can fix related to my web and program development.
          </p>
        </div>
        <div class="col-sm-6 text-left">
          <p class="pKanan">I'll be happy to provide you with the best solutions tailored specifically to your business
            needs. It doesn't matter if you're technical or not, I can communicate the features that your business needs
            on all levels. I constantly improve my technical skills by following the latest news, watching screencasts,
            attending conferences.
            <br><br>
            Availability is the key. I'm available to work on any day of the week and if sometimes I'm not, I will be
            giving you a lot of notifications of that. I have worked with plenty of clients around the globe launching
            successful projects and have had no problems scheduling a good time that would work for both of us.
            summary of skill set:
            <br><br>
            ✔ React.js(saga,axios), Vue.js
            <br>
            ✔ bootstrap4 & 5,
            <br>
            ✔ Node.js, Express
            <br>
            ✔ PHP Framework(Laravel,CI)
            <br>
            ✔ Python
            <br>
            ✔Editing
            <br><br>
            languages:
            PHP, HTML, CSS3, C#, Javascript, Python, bootstrap
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection