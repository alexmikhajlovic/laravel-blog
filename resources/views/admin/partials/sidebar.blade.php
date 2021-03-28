<div class="col-xs-4 p-3" style="width: 20%; min-height: 85vh; border-right: 1px solid grey;">
    <ul class="list-group">
        <a href="{{ url('/admin') }}"><li class="list-group-item d-flex justify-content-between align-items-center bg-dark text-light"><i class="fas fa-house-user"></i> Dashboard<span class="badge bg-primary rounded-pill">3</span></li></a>
        <a href="{{ route('post.index') }}"><li class="list-group-item d-flex justify-content-between align-items-center bg-dark text-light"><i class="far fa-file-alt"></i> Posts<span class="badge bg-primary rounded-pill">2</span></li></a>
        <a href=""><li class="list-group-item d-flex justify-content-between align-items-center bg-dark text-light"><i class="fas fa-users"></i> Users<span class="badge bg-primary rounded-pill">1</span></li></a>
        <a href=""><li class="list-group-item d-flex justify-content-between align-items-center bg-dark text-light"><i class="fas fa-tags"></i> Tags<span class="badge bg-primary rounded-pill">1</span></li></a>
    </ul>
</div>