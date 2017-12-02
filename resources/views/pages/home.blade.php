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
                  <li class="social facebook"></li>
                  <li class="social linkedin"></li>
                  <li class="social instagram"></li>
                  <li class="social github"></li>
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


  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
     et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut al
     iquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
     et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut al
     iquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
     et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut al
     iquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
     et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut al
     iquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
     et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut al
     iquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
@endsection
