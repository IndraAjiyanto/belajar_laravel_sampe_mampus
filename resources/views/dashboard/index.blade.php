@extends('dashboard.layouts.main')

@section('main')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
    <h1 class="h2 fw-bold text-primary">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-primary">
          <i class="bi bi-plus-circle"></i> Add New
        </button>
        <button type="button" class="btn btn-sm btn-outline-secondary">
          <i class="bi bi-download"></i> Export
        </button>
      </div>
    </div>
  </div>


  <!-- <div class="row g-3 mb-4">
    <div class="col-md-4">
      <div class="card border-0 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Total Posts</h5>
          <p class="card-text fs-4 fw-bold text-primary">120</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-0 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">New Comments</h5>
          <p class="card-text fs-4 fw-bold text-success">45</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-0 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Pending Reviews</h5>
          <p class="card-text fs-4 fw-bold text-danger">8</p>
        </div>
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <h5 class="mb-3">Recent Activities</h5>
    <table class="table table-striped table-hover align-middle">
      <thead class="table-primary">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Activity</th>
          <th scope="col">Date</th>
          <th scope="col">Status</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>New post created: "How to Code"</td>
          <td>2025-01-11</td>
          <td><span class="badge bg-success">Completed</span></td>
          <td>
            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></button>
            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Comment added to "Learning PHP"</td>
          <td>2025-01-10</td>
          <td><span class="badge bg-warning text-dark">Pending</span></td>
          <td>
            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></button>
            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Review submitted for "Advanced Laravel"</td>
          <td>2025-01-09</td>
          <td><span class="badge bg-danger">Rejected</span></td>
          <td>
            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></button>
            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div> -->
@endsection
