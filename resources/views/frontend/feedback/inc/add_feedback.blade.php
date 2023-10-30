<div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Add Feedback</h5>
                    <button type="button" class="close" data-dismiss="modal">
                      <span>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ route('feedback.store')}}" method="post">
                      @csrf
                    <div class="form-group">
                        <label for="name">Category</label>
                        <select name="category_id" class="form-control">
                          @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" id="name" name="title" required>
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" cols="10" rows="5" required></textarea>
                      </div>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  </form>
                </div>
                