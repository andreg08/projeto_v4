<div class="nav-tabs-responsive">
  <ul class="nav nav-tabs mb-4">
    <li class="nav-item">
      <a href="#account" class="nav-link active" data-toggle="tab">
        <i class="icon-lock"></i> Account
      </a>
    </li>
    <li class="nav-item">
      <a href="#personal" class="nav-link" data-toggle="tab">
        <i class="icon-user"></i> Personal
      </a>
    </li>
    <li class="nav-item">
      <a href="#payment" class="nav-link" data-toggle="tab">
        <i class="icon-credit-card"></i> Payment
      </a>
    </li>
  </ul>
  <form id="formOrder" class="tab-content">
    <div id="account" class="tab-pane show active">
      <div class="mb-3">
        <a href="#account-collapse" data-toggle="collapse">
          <i class="icon-lock"></i> Account
        </a>
      </div>
      <div id="account-collapse" class="collapse show" data-parent="#formOrder">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <div class="form-group">
              <label>E-mail</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control">
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <div class="form-group">
              <label>Confirm password</label>
              <input type="password" class="form-control">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="personal" class="tab-pane">
      <div class="mb-3">
        <a href="#personal-collapse" data-toggle="collapse">
          <i class="icon-user"></i> Personal
        </a>
      </div>
      <div id="personal-collapse" class="collapse" data-parent="#formOrder">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="form-group">
              <label>Full name</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label>Gender</label>
                  <select class="form-control">
                    <option></option>
                    <option>Female</option>
                    <option>Male</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label>Date of birth</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <div class="form-group">
              <label>Phone number</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label>Zip code</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label>State</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="form-group">
              <label>Home address</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="payment" class="tab-pane">
      <div class="mb-3">
        <a href="#payment-collapse" data-toggle="collapse">
          <i class="icon-credit-card"></i> Payment
        </a>
      </div>
      <div id="payment-collapse" class="collapse" data-parent="#formOrder">
        <div class="row">
          <div class="col-12 col-md-8 col-lg-8">
            <div class="form-group">
              <label>Card number</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-4">
            <div class="form-group">
              <label>CVC</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8">
            <div class="form-group">
              <label>Card holder name</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="row">
              <div class="col-12 col-md-4 col-lg-6">
                <div class="form-group">
                  <label>Expiry month</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-6">
                <div class="form-group">
                  <label>Expiry year</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="d-block d-md-flex">
      <div class="d-block d-md-inline ml-auto mb-3">
        <button type="submit" class="btn btn-success btn-block">
          Save
        </button>
      </div>
    </div>
  </form>
</div>