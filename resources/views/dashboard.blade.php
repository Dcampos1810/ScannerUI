@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">qr_code</i>
              </div>
              <p class="card-category">QR codes generated</p>
              <h3 class="card-title" id="count1">0</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Business</p>
              <h3 class="card-title">5000</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">toc</i>
                <a href="{{ route('business') }}">See Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Customers</p>
              <h3 class="card-title">+24500</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Just Updated
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-success">
              <div class="ct-chart" id="dailySalesChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Daily Sales</h4>
              <p class="card-category">
                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in weekly sales.</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> updated 4 minutes ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-warning">
              <div class="ct-chart" id="websiteViewsChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Monthly Sales</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-danger">
              <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Higher Check-in Attendance</h4>
              <p class="card-category">Daily based </p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> updated 2 hours ago
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
              <div class="card-header card-header-info">
                <h4 class="card-title">Customer Experience / Surveys</h4>
                <p class="card-category">Bbtaining feedbacks / surveys from our clients from the app</p>
              </div>
              <div class="card-body table-responsive">
                <table class="table table-hover">
                  <thead class="text-info">
                    <th style="5%">Score</th>
                    <th>Customer</th>
                    <th>Store/Franchise</th>
                    <th>Comment</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </td>
                      <td>Isidro Jacobson</td>
                      <td>Walmart California</td>
                      <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu</td>
                    </tr>
                    <tr>
                      <td>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                      </td>
                      <td>Geert Miner</td>
                      <td>Sam's Club New York</td>
                      <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu</td>
                    </tr>
                    <tr>
                      <td>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                      </td>
                      <td>Maximiano Fauro Tuca</td>
                      <td>Costco CDMX</td>
                      <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu</td>
                    </tr>
                    <tr>
                      <td>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </td>
                      <td>Shiela U. Speight</td>
                      <td>Walmart Mérida</td>
                      <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <div class="col-lg-4 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Most Used Places Monthly</h4>
              <p class="card-category">Places where the people are using more Ingenico Scanner App</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>Times</th>
                  <th>Name</th>
                  <th>City</th>
                  <th>Country</th>
                </thead>
                <tbody>
                  <tr>
                    <td>800</td>
                    <td>Patel Brothers</td>
                    <td>California</td>
                    <td>USA</td>
                  </tr>
                  <tr>
                    <td>730</td>
                    <td>Shop Rites</td>
                    <td>New York</td>
                    <td>USA</td>
                  </tr>
                  <tr>
                    <td>500</td>
                    <td>FreshCo</td>
                    <td>Toronto</td>
                    <td>Canada</td>
                  </tr>
                  <tr>
                    <td>250</td>
                    <td>Dollarama</td>
                    <td>New Jersey</td>
                    <td>USA</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
    const counterAnim = (qSelector, start = 0, end, duration = 1000) => {
        const target = document.querySelector(qSelector);
        let startTimestamp = null;
        const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            target.innerText = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
        };
        window.requestAnimationFrame(step);
    };
    //#endregion - end of - number counter animation

    document.addEventListener("DOMContentLoaded", () => {
    counterAnim("#count1", 1, 300, 3000);
});

  </script>
@endpush
