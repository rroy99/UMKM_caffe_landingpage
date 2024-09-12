<form action="{{ url('book-a-table') }}" method="post" role="form" class="php-email-form">
  @csrf
  <div class="row">
    <div class="col-md-6 form-group">
      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
    </div>
    <div class="col-md-6 form-group mt-3 mt-md-0">
      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
    </div>
  </div>
  <div class="form-group mt-3">
    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
  </div>
  <div class="form-group mt-3">
    <input type="date" class="form-control" name="date" id="date" placeholder="Date" required>
  </div>
  <div class="form-group mt-3">
    <input type="time" class="form-control" name="time" id="time" placeholder="Time" required>
  </div>
  <div class="form-group mt-3">
    <input type="number" class="form-control" name="people" id="people" placeholder="# of people" required>
  </div>
  <div class="form-group mt-3">
    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
  </div>
  <div class="my-3">
    <div class="loading">Loading</div>
    <div class="error-message"></div>
    <div class="sent-message">Your message has been sent. Thank you!</div>
  </div>
  <div class="text-center"><button type="submit">Send Message</button></div>
</form>
