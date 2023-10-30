

<div class="modal fade" id="writeComment">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Comment</h5>
                            <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('comment_store')}}" method="post">
                            @csrf
                            <div class="form-group">
                            <input type="hidden" name="feedback_id" value="{{$feedback->id}}"/>
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <textarea name="comment" class="form-control" id="" cols="10" rows="5" placeholder="Enter Comment here!..." required></textarea>
                            </div>
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </div>
                        </form>
                    </div>
                    </div>
