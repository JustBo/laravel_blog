@extends('layouts.app')

@section('content')
  <div class="main-image">
    <img src="{{ asset('images/main.jpg') }}" alt="">
    <div class="wellcome-text">
      Hi, I'm Bohdan Tsybulskyi
    </div>
  </div>
  <div class="container">
    <section class="section aboutme">
      <h1>about me</h1>
      <div class="separator">
        <div class="separator-line background-black"></div>
      </div>
      <div class="section-content">
        <div class="row row-eq-height">
          <div class="col-md-6">
            <div class="personal-info">
              <img src="{{ asset('images/avatar.jpg') }}" alt="personal photo">
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-text">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                 et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut al
                 iquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                 Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <div class="social-buttons">
                <ul>
                  <li class="social facebook"><a class="social-link" href="https://www.facebook.com/profile.php?id=100001600809506" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li class="social linkedin"><a class="social-link" href="https://www.facebook.com/profile.php?id=100001600809506" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  <li class="social instagram"><a class="social-link" href="https://www.facebook.com/profile.php?id=100001600809506" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <li class="social github"><a class="social-link" href="https://www.facebook.com/profile.php?id=100001600809506" target="_blank"><i class="fa fa-github"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <section class="section work-experience" style="background-image:url('{{ asset('images/work-experience.jpg') }}');">
    <div class="section-banner"></div>
    <h1 class="white-color">work experience</h1>
    <div class="separator">
      <div class="separator-line background-white"></div>
    </div>
    <div class="container">
      <div class="section-content">
        <div class="row work-info">
          <div class="col-md-6 left-work-exp">
            <div class="">
              <div class="company-years">
                <span>2016 - 2017</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 right-work-exp">
            <div class="">
              <div class="company-name">
                Company name
              </div>
              <div class="work-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </div>
            </div>
          </div>
        </div>
        <div class="row work-info">
          <div class="col-md-6 left-work-exp">
            <div class="">
              <div class="company-name">
                Company name
              </div>
              <div class="work-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </div>
            </div>
          </div>
          <div class="col-md-6 right-work-exp">
            <div class="">
              <div class="company-years">
                <span>2016 - 2017</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row work-info">
          <div class="col-md-6 left-work-exp">
            <div class="">
              <div class="company-years">
                <span>2016 - 2017</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 right-work-exp">
            <div class="">
              <div class="company-name">
                Company name
              </div>
              <div class="work-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section education">
    <h1 class="white-color">education</h1>
    <div class="separator">
      <div class="separator-line background-white"></div>
    </div>
    <div class="section-content">
      <div class="container">
        <div class="section-content">
          <div class="row work-info">
            <div class="col-md-6 left-work-exp">
              <div class="">
                <div class="company-years">
                  <span>2016 - 2017</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 right-work-exp">
              <div class="">
                <div class="company-name">
                  University
                </div>
                <div class="work-description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
          </div>
          <div class="row work-info">
            <div class="col-md-6 left-work-exp">
              <div class="">
                <div class="company-name">
                  University
                </div>
                <div class="work-description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
            <div class="col-md-6 right-work-exp">
              <div class="">
                <div class="company-years">
                  <span>2016 - 2017</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row work-info">
            <div class="col-md-6 left-work-exp">
              <div class="">
                <div class="company-years">
                  <span>2016 - 2017</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 right-work-exp">
              <div class="">
                <div class="company-name">
                  University
                </div>
                <div class="work-description">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="add-line"></div>


  <section class="section latest-projects">
    <h1>latest projects</h1>
    <div class="separator">
      <div class="separator-line background-black"></div>
    </div>
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="project-item">
              <img src="http://www.computerscience.org/wp-content/uploads/2015/10/icon-computer-desk.svg" alt="project1">
              <div class="project-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project-item">
              <img src="http://www.computerscience.org/wp-content/uploads/2015/10/icon-computer-desk.svg" alt="project2">
              <div class="project-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project-item">
              <img src="http://www.computerscience.org/wp-content/uploads/2015/10/icon-computer-desk.svg" alt="project3">
              <div class="project-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- <div class="add-line1"></div> --}}
  <section class="section skills" style="background-image:url('{{asset('images/skills2.jpg')}}')">
    <div class="section-banner"></div>
    <h1 class="white-color">skills</h1>
    <div class="separator">
      <div class="separator-line background-white"></div>
    </div>
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="skills-charts">
              <ul>
                <li>
                  <div class="skill-description">
                    HTML
                  </div>
                  <div class="skill-progress-bar">
                    <div class="skill-progress" style="width:100%"></div>
                  </div>
                </li>
                <li>
                  <div class="skill-description">
                    CSS
                  </div>
                  <div class="skill-progress-bar">
                    <div class="skill-progress" style="width:80%"></div>
                  </div>
                </li>
                <li>
                  <div class="skill-description">
                    JS
                  </div>
                  <div class="skill-progress-bar">
                    <div class="skill-progress" style="width:84%"></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="skills-charts">
              <ul>
                <li>
                  <div class="skill-description">
                    PHP
                  </div>
                  <div class="skill-progress-bar">
                    <div class="skill-progress" style="width:96%"></div>
                  </div>
                </li>
                <li>
                  <div class="skill-description">
                    MySQL
                  </div>
                  <div class="skill-progress-bar">
                    <div class="skill-progress" style="width:78%"></div>
                  </div>
                </li>
                <li>
                  <div class="skill-description">
                    Laravel
                  </div>
                  <div class="skill-progress-bar">
                    <div class="skill-progress" style="width:65%"></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  {{-- <div class="add-line"></div> --}}


@endsection
