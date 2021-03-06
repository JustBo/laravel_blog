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
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <div class="personal-info">
              <img src="{{ asset('images/avatar.jpg') }}" alt="personal photo">
            </div>
          </div>
          <div class="col-xs-12 col-md-6">
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
        @foreach ($experiences as $key => $experience)
          <div class="row work-info">
            <div class="col-xs-6 col-md-6 left-work-exp">
              <div class="">
                @if ( $loop->index % 2 == 0 )
                  <div class="company-years">
                    <span>{{ \Carbon\Carbon::parse($experience->start)->format('Y/m') }} - {{ \Carbon\Carbon::parse($experience->end)->format('Y/m') }}</span>
                  </div>
                @else
                  <div class="company-name">
                    {{ $experience->place }}
                  </div>
                  <div class="work-description">
                    {{ $experience->description }}
                  </div>
                @endif
              </div>
            </div>
            <div class="col-xs-6 col-md-6 right-work-exp">
              <div class="">
                @if ( $loop->index % 2 == 0 )
                  <div class="company-name">
                    {{ $experience->place }}
                  </div>
                  <div class="work-description">
                    {{ $experience->description }}
                  </div>
                @else
                  <div class="company-years">
                    <span>{{ \Carbon\Carbon::parse($experience->start)->format('Y/m') }} - {{ \Carbon\Carbon::parse($experience->end)->format('Y/m') }}</span>
                  </div>
                @endif
              </div>
            </div>
          </div>
        @endforeach
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
          @foreach ($educations as $key => $education)
            <div class="row work-info">
              <div class="col-xs-6 col-md-6 left-work-exp">
                <div class="">
                  @if ( $loop->index % 2 == 0 )
                    <div class="company-years">
                      <span>{{ \Carbon\Carbon::parse($education->start)->format('Y/m') }} - {{ \Carbon\Carbon::parse($education->end)->format('Y/m') }}</span>
                    </div>
                  @else
                    <div class="company-name">
                      {{ $education->place }}
                    </div>
                    <div class="work-description">
                      {{ $education->description }}
                    </div>
                  @endif
                </div>
              </div>
              <div class="col-xs-6 col-md-6 right-work-exp">
                <div class="">
                  @if ( $loop->index % 2 == 0 )
                    <div class="company-name">
                      {{ $education->place }}
                    </div>
                    <div class="work-description">
                      {{ $education->description }}
                    </div>
                  @else
                    <div class="company-years">
                      <span>{{ \Carbon\Carbon::parse($education->start)->format('Y/m') }} - {{ \Carbon\Carbon::parse($education->end)->format('Y/m') }}</span>
                    </div>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <section class="section latest-projects">
    <h1>latest projects</h1>
    <div class="separator">
      <div class="separator-line background-black"></div>
    </div>
    <div class="section-content">
      <div class="container">
        <div class="row">
          @foreach ($projects as $key => $project)
            <div class="col-md-4">
              <div class="project-item">
                <div class="image-container project-icon">
                  <img src=" {{ asset('storage/images/projects/'.$project->icon) }} " alt="project1">
                  <a href="{{ route('project.details', ['id' => $project->id]) }}">
                    <span class="project-icon-popup">
                      {{ $project->title }}
                    </span>
                  </a>
                </div>
                <div class="project-description">
                  <a href="{{ route('project.details', ['id' => $project->id]) }}">{{ $project->description }}</a>
                </div>
              </div>
            </div>
          @endforeach
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
                  @for ($i=0; $i < round(count($skills)/2); $i++)
                    <li>
                      <div class="skill-description">
                        {{ $skills[$i]->skill }}
                      </div>
                      <div class="skill-progress-bar">
                        <div class="skill-progress" style="width:{{ $skills[$i]->progress }}%"></div>
                      </div>
                    </li>
                  @endfor
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="skills-charts">
              <ul>
                @for ($i=round(count($skills)/2); $i < count($skills); $i++)
                  <li>
                    <div class="skill-description">
                      {{ $skills[$i]->skill }}
                    </div>
                    <div class="skill-progress-bar">
                      <div class="skill-progress" style="width:{{ $skills[$i]->progress }}%"></div>
                    </div>
                  </li>
                @endfor
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  {{-- <div class="add-line"></div> --}}


@endsection
