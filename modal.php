<?php
/**
 * The modal Containing the signup form.
 *
 * @package GorMonjeeTheme
 */
?>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span width="100px"aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign Up For Gormonjee Beta</h4>
      </div>
      <div class="modal-body">
        Name <input></input>
        Email <input></input><br>
        <p><input type="checkbox" name="option" value="newsletter"></input> I'd like to recive Gormonjee newsletter.<br>
        <input type="checkbox" name="option" value="beta" checked></input> I'd like to join the Gormonjee beta program.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Join</button>
      </div>
    </div>
  </div>
</div>