<div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="close" data-dismiss="modal">
                      <span>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ route('login')}}" method="post">
                      @csrf
 
                      <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email" name="email" id="email" autocomplete="off">
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" id="password">
                      </div>
                   
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  </form>
                </div>
                