<div class="popup-holder">
  <div id="complete-and-upgrade" class="lightbox-hold">
    <a href="#" class="close icon-close"></a>
    <div class="block-info form-box">
        <div class="head">
          <h1><?php _e( 'Woohoo! You\'re almost ready to go!', 'wordlift' ); ?></h1>
        </div>
        <form action="#" class="form">
          <fieldset>
            <p><?php _e( '1. Payment information', 'wordlift' ); ?></p>
            <div class="row">
              <div class="input-holder">
                <label for="card-number"><?php _e( 'Credit Card Number', 'wordlift' ); ?></label>
                <input type="text" id="card-number">
              </div>
              <div class="select-wrap">
                <div class="select-box">
                  <label for="date"><?php _e( 'Expiration (MM / YYYY)', 'wordlift' ); ?></label>
                  <input type="text" id="date" placeholder="<?php _e( 'MM / YYYY', 'wordlift' ); ?>">
                </div>
                <div class="input-holder">
                  <label for="code"><?php _e( 'Security code', 'wordlift' ); ?></label>
                  <input type="text" id="code">
                </div>
              </div>
            </div>
            <p><?php _e( '2. Billing Cycle', 'wordlift' ); ?></p>
            <ul class="checkbox-list">
              <li>
                <input type="radio" id="radio-01" name="group-radio">
                <label for="radio-01"><?php _e( 'Monthly - $50 per month', 'wordlift' ); ?></label>
              </li>
              <li>
                <input type="radio" id="radio-02" name="group-radio">
                <label for="radio-02"><?php _e( 'Yearly - S510 per year', 'wordlift' ); ?> <mark><b><?php _e( '(15% off)', 'wordlift' ); ?></b></mark></label>
              </li>
            </ul>
            <button type="submit"><?php _e( 'BUY AND ACTIVATE', 'wordlift' ); ?></button>
          </fieldset>
        </form>
      </div>
  </div>
</div>