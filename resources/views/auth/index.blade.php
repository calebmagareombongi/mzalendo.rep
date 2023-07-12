<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PROJECTS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/rwd.table.min.css'>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
 

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-9">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Projects CRUD</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <a href="{{ route('auth.create') }}" class="btn btn-success btn-sm" title="Add New Project">
              <i class="fa fa-plus" aria-hidden="true"></i> Add New Project
            </a>
            <br/>
            <br/>
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project Description</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project Budget</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project Start Date</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project End Date</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($projects as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->project_name }}</td>
                    <td>{{ $item->project_desc }}</td>
                    <td>{{ $item->project_budget }}</td>
                    <td>{{ $item->project_status }}</td>
                    <td>{{ $item->project_start_date }}</td>
                    <td>{{ $item->project_end_date }}</td>
                    <td>
                      <a href="{{ route('auth.show', $item->id) }}" title="View Project">
                        <button class="btn btn-info btn-sm">
                          <i class="fa fa-eye" aria-hidden="true"></i> View
                        </button>
                      </a>
                      <a href="{{ route('auth.edit', $item->id) }}" title="Edit Project">
                        <button class="btn btn-primary btn-sm">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                        </button>
                      </a>
                      <form method="POST" action="{{ route('auth.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Project" onclick="return confirm('Confirm delete?')">
                          <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                        </button>
                      </form>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="5">No projects found.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
