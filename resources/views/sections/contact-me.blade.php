<section class="section" data-section="contact-section">
    <div class="container">
        <div class="section-heading">
            <h2>{{ __('index.contact.title') }}</h2>
            <div class="line-dec"></div>
            <span style="display: none; color: #00ff3c" id="success" role="alert"></span>
        </div>
        <div class="row">
            <div class="right-content">
                <div class="container">
                    <form id="contact" action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <input name="name" type="text" class="form-control" id="name" placeholder="{{ __('index.contact.input.name') }}">
                                <span id="name_error" style="color: #ff2828" role="alert"></span>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input name="email" type="text" class="form-control" id="email" placeholder="{{ __('index.contact.input.email') }}">
                                <span id="email_error" style="color: #ff2828" role="alert"></span>
                            </div>
                            <div class="col-md-12 mb-4">
                                <input name="subject" type="text" class="form-control" id="subject" placeholder="{{ __('index.contact.input.subject') }}">
                                <span id="subject_error" style="color: #ff2828" role="alert"></span>
                            </div>
                            <div class="col-md-12 mb-4">
                                <textarea disabled name="message" rows="6" class="form-control" id="message" placeholder="{{ __('index.contact.input.message') }}"></textarea>
                                <span id="message_error" style="color: #ff2828" role="alert"></span>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" id="form-submit" class="button">
                                    {{ __('index.contact.button') }}
                                    <svg style="display: none" id="contact-loading" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         x="0px" y="0px" height="30" viewBox="0 0 100 100" xml:space="preserve">
                                            <path fill="#000" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                                                <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                                                                  from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                                            </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
