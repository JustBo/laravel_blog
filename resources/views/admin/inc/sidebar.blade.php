<div class="sidebar">
  <section class="section-content control-panel">
    <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
  </section>
  <section class="section-content">
    <div class="section-header">
      Content
    </div>
    <ul>
      <li><a href="{{ route('admin.blog.index') }}">Blog</a></li>
      <li><a href="{{ route('admin.projects.index') }}">Projects</a></li>
      <li><a href="{{ route('admin.category.index') }}">Categories</a></li>
      <li><a href="{{ route('admin.skills.index') }}">Skills</a></li>
      <li><a href="{{ route('admin.education.index') }}">Education</a></li>
      <li><a href="{{ route('admin.experience.index') }}">Experience</a></li>
    </ul>
  </section>
  <section class="section-admin">
    <div class="section-header">
      Administration
    </div>
    <ul>
      <li><a href="{{ route('admin.user') }}">Users</a></li>
      {{-- <li><a href="#">Statistics</a></li> --}}
    </ul>
  </section>
  <a class="logout-button" href="{{ route('admin.logout') }}">Log out</a>
</div>
