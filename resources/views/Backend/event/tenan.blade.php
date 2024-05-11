@extends('backend.app')
@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="tr-job-posted section-padding">
        <div class="tr-job-posted section-padding">
            <div class="container">
                <div class="job-tab text-center">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li role="presentation" class="active">
                            <a class="active show" href="#/semua" aria-controls="hot-jobs" role="tab" data-toggle="tab"
                                aria-selected="true">Semua</a>
                        </li>
                        <li role="presentation"><a href="#recent-jobs" aria-controls="recent-jobs" role="tab"
                                data-toggle="tab" class="" aria-selected="false">Belum Verifikasi</a></li>
                        <li role="presentation"><a href="#recent-jobs" aria-controls="recent-jobs" role="tab"
                                data-toggle="tab" class="" aria-selected="false">Tervrifikasi</a></li>
                        <li role="presentation"><a href="#popular-jobs" aria-controls="popular-jobs" role="tab"
                                data-toggle="tab" class="" aria-selected="false">Ditolak</a></li>
                    </ul>
                    <div class="tab-content text-left">
                        <div role="tabpanel" class="tab-pane fade active show" id="hot-jobs">
                            <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    @foreach ($tenants as $tenant)
                                        <div class="job-item">
                                            <div class="item-overlay">

                                                <div class="job-info">

                                                    <a class="btn btn-primary">Full Time</a>
                                                    <span class="tr-title">
                                                        {{ $tenant->nama_booth }}
                                                        <span><a href="#">Dig File</a></span>
                                                    </span>
                                                    <ul class="tr-list job-meta">
                                                        <li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco,
                                                            CA,
                                                            US</li>
                                                        <li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
                                                        <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000
                                                        </li>
                                                    </ul>
                                                    <ul class="job-social tr-list">
                                                        <li><a href="#"><i class="fa fa-heart-o"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-expand"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-bookmark-o"
                                                                    aria-hidden="true"></i></a></li>
                                                        {{-- <li><a href="{{ route('detail_event.show', $detailtenant->id) }}"><i
                                                                class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                    </li> --}}
                                                    </ul>
                                                </div>


                                            </div>
                                            <div class="job-info">
                                                <div class="company-logo">
                                                    <img src="https://www.bootdey.com/image/150x150/7B68EE/000000"
                                                        alt="images" class="img-fluid">
                                                </div>
                                                <a
                                                    style="font-weight:800; font-size:18px; color:black">{{ $tenant->nama_booth }}</a>

                                                <ul class="tr-list job-meta">
                                                    <li><span>
                                                            <i class="fa fa-map-signs"></i>
                                                        </span>{{ $tenant->nama_pemilik }}
                                                    </li>
                                                    <li><span>
                                                            <i class="fa fa-briefcase"></i>
                                                        </span>{{ $tenant->no_telp }}
                                                    </li>
                                                    <li><span>
                                                            <i class="fa fa-money"
                                                                aria-hidden="true"></i></span>{{ $tenant->booth }}
                                                    </li>
                                                </ul>
                                                <div class="time">
                                                    <a>
                                                        <span
                                                            style="background-color: {{ $tenant->status_verifikasi === 'unverified' ? 'red' : 'green' }}">
                                                            {{ $tenant->status_verifikasi }}
                                                        </span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>



                            </div><!-- /.row -->
                        </div><!-- /.tab-pane -->

                        <!-- /.belum verifikasi -->
                        <div role="tabpanel" class="tab-pane fade in" id="recent-jobs">
                            <div class="row">

                                <div class="col-md-6 col-lg-3">
                                    <div class="job-item">
                                        <div class="item-overlay">
                                            <div class="job-info">
                                                <a href="#" class="btn btn-primary">Part Time</a>
                                                <span class="tr-title">
                                                    <a href="#">Design Consultant</a>
                                                    <span><a href="#">Families</a></span>
                                                </span>
                                                <ul class="tr-list job-meta">
                                                    <li><i class="fa fa-map-signs" aria-hidden="true"></i>San
                                                        Francisco,
                                                        CA,
                                                        US</li>
                                                    <li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level
                                                    </li>
                                                    <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000
                                                    </li>
                                                </ul>
                                                <ul class="job-social tr-list">
                                                    <li><a href="#"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-expand"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-bookmark-o"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-long-arrow-right"
                                                                aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="company-logo">
                                                <img src="https://www.bootdey.com/image/300x100/00CED1/000000"
                                                    alt="images" class="img-fluid">
                                            </div>
                                            <span class="tr-title">
                                                <a href="#">Design Consultant</a>
                                                <span><a href="#">Families</a></span>
                                            </span>
                                            <ul class="tr-list job-meta">
                                                <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San
                                                    Francisco, CA, US</li>
                                                <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid
                                                    Level
                                                </li>
                                                <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000
                                                    -
                                                    $6,000
                                                </li>
                                            </ul>
                                            <div class="time">
                                                <a href="#"><span class="part-time">Part Time</span></a>
                                                <span class="pull-right">Posted Oct 09, 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.tab-pane -->

                        <!-- /.Terverifikasi -->
                        <div role="tabpanel" class="tab-pane fade in" id="popular-jobs">
                            <div class="row">


                                <div class="col-md-6 col-lg-3">
                                    <div class="job-item">
                                        <div class="item-overlay">
                                            <div class="job-info">
                                                <a href="#" class="btn btn-primary">Part Time</a>
                                                <span class="tr-title">
                                                    <a href="#">Design Consultant</a>
                                                    <span><a href="#">Owl</a></span>
                                                </span>
                                                <ul class="tr-list job-meta">
                                                    <li><i class="fa fa-map-signs" aria-hidden="true"></i>San
                                                        Francisco,
                                                        CA,
                                                        US</li>
                                                    <li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level
                                                    </li>
                                                    <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000
                                                    </li>
                                                </ul>
                                                <ul class="job-social tr-list">
                                                    <li><a href="#"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-expand"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-bookmark-o"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-long-arrow-right"
                                                                aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="company-logo">
                                                <img src="https://www.bootdey.com/image/300x100/9370DB/000000"
                                                    alt="images" class="img-fluid">
                                            </div>
                                            <span class="tr-title">
                                                <a href="#">Design Consultant</a>
                                                <span><a href="#">Owl</a></span>
                                            </span>
                                            <ul class="tr-list job-meta">
                                                <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San
                                                    Francisco, CA, US</li>
                                                <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid
                                                    Level
                                                </li>
                                                <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000
                                                    -
                                                    $6,000</li>
                                            </ul>
                                            <div class="time">
                                                <a href="#"><span class="part-time">Part Time</span></a>
                                                <span class="pull-right">Posted 10 day ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- /.row -->
                        </div><!-- /.tab-pane -->

                        <!-- /.belum verifikasi -->
                        <div role="tabpanel" class="tab-pane fade in" id="recent-jobs">
                            <div class="row">

                                <div class="col-md-6 col-lg-3">
                                    <div class="job-item">
                                        <div class="item-overlay">
                                            <div class="job-info">
                                                <a href="#" class="btn btn-primary">Part Time</a>
                                                <span class="tr-title">
                                                    <a href="#">Design Consultant</a>
                                                    <span><a href="#">Families</a></span>
                                                </span>
                                                <ul class="tr-list job-meta">
                                                    <li><i class="fa fa-map-signs" aria-hidden="true"></i>San
                                                        Francisco,
                                                        CA,
                                                        US</li>
                                                    <li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level
                                                    </li>
                                                    <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000
                                                    </li>
                                                </ul>
                                                <ul class="job-social tr-list">
                                                    <li><a href="#"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-expand"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-bookmark-o"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-long-arrow-right"
                                                                aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="company-logo">
                                                <img src="https://www.bootdey.com/image/300x100/00CED1/000000"
                                                    alt="images" class="img-fluid">
                                            </div>
                                            <span class="tr-title">
                                                <a href="#">Design Consultant</a>
                                                <span><a href="#">Families</a></span>
                                            </span>
                                            <ul class="tr-list job-meta">
                                                <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San
                                                    Francisco, CA, US</li>
                                                <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid
                                                    Level
                                                </li>
                                                <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000
                                                    -
                                                    $6,000
                                                </li>
                                            </ul>
                                            <div class="time">
                                                <a href="#"><span class="part-time">Part Time</span></a>
                                                <span class="pull-right">Posted Oct 09, 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.tab-pane -->
                    </div><!-- /.tab-conten -->
                </div><!-- /.job-tab -->
            </div><!-- /.container -->
        </div>
    @endsection
