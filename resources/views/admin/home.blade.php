@extends('admin.layouts.default')

@section('content')
<div class="col-md-11 col-lg-4 col-xl-4 order-0 mb-4">
    <div class="card h-100 w-100">
      <div class="card-header d-flex align-items-center justify-content-between pb-0">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Pinnacle</h5>
          <small class="text-muted">total users</small>
        </div>
        <div class="dropdown">
          <button
            class="btn p-0"
            type="button"
            id="orederStatistics"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex flex-column align-items-center gap-1">
            <h2 class="mb-2">{{ $groupcount }}</h2>
            <span>Total groups</span>
          </div>
          <div id="orderStatisticsChart"></div>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary"
                ><i class=""></i
              ></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">User</h6>
                <small class="text-muted"></small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">{{ $usercount }}</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-success"><i class=""></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">group</h6>
                <small class="text-muted">total groups</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">{{ $groupcount }}</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-info"><i class=""></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">post</h6>
                <small class="text-muted">total post</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">{{ $postcount }}</small>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-secondary"
                ><i class=""></i
              ></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">communities</h6>
                <small class="text-muted">Total Communities</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">{{ $communitycount }}</small>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Order Statistics -->

  <!-- Expense Overview -->


@endsection