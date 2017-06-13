
<div class="modal fade" id="new-member-modal" tabindex="-1" role="dialog"
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header" style="background-color:white;">
             {{-- <h5 style="font-weight:bold;">New Member Details</h5> --}}
             <button type="button" class="close" data-dismiss="modal">
                 <span aria-hidden="true">×</span><span class="sr-only">Close</span>
             </button>
            <h4 class="modal-title" id="myModalLabel">
               Add Member
            </h4>
         </div>
         <!-- Modal Body -->
         <div class="modal-body row">
             <form id="new-member-form" class="form-horizontal" role="form" method="POST" action="">
                {{ csrf_field() }}

                <div class="form-group col-md-6 {{ $errors->has('first_name') ? ' has-error' : '' }}" >
                    <label for="first_name" class="control-label">First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="">
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                    @endif
                </div>

                <div class="form-group col-md-6 {{ $errors->has('last_name') ? ' has-error' : '' }}" >
                    <label for="last_name" class="control-label">Last Name</label>
                    <input class="form-control" type="text" name="last_name" id="last_name" value="">
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                    @endif
                </div>

            </form>
         </div>
         <!-- End Modal Body -->
         <!-- Modal Footer -->
         <div class="modal-footer">
             <span class="pull-right">
                 <button type="button" class="btn btn-default btn-custom" data-dismiss="modal">Cancel</button>
                 <button type="submit" form="new-member-form" class="btn btn-primary">Save Details</button>
             </span>
         </div>
         <!-- End Modal Footer -->
      </div>
   </div>
</div>
