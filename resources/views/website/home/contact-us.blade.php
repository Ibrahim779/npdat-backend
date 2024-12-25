<div id="header-contact-modal">
    <div class="lqd-modal-inner py-25 px-2em">
      <div class="lqd-modal-content">
        <div
          class="relative flex flex-wrap py-80 -mr-15 -ml-15 module-bottom"
        >
          <div class="container">
            <div
              class="row items-center"
              style="justify-content: space-around"
            >
              <div class="col col-12 col-md-6">
                <div
                  class="relative flex flex-col justify-content transition-all border-1 border-black-10 rounded-4 pt-55 pb-35 px-60 module-inner"
                >
                  <div class="ld-fancy-heading">
                    <h2
                      class="ld-fh-element mb-0/5em text-34 font-semibold"
                    >
                      {{ $homeSetting->getContactTitle() }}
                    </h2>
                  </div>
                  <div class="ld-fancy-heading">
                    <p class="ld-fh-element mb-2/5em">
                      {{ $homeSetting->getContactDescription() }}
                    </p>
                  </div>
                  <div
                    class="iconbox text-align-default mb-10 items-start"
                  >
                    <div class="iconbox-icon-wrap flex">
                      <span
                        class="iconbox-icon-container text-gray-200 text-16 ml-15"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                          height="1em"
                          viewBox="0 0 384 512"
                        >
                          <path
                            d="M384 192c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192z"
                          />
                        </svg>
                      </span>
                    </div>
                    <h3 class="text-15 text-black-60 leading-1/5em">
                      {{ $general_settings->getAddress() }}
                    </h3>
                  </div>

                  <div
                    class="iconbox text-align-default mb-10 items-start"
                  >
                    <div class="iconbox-icon-wrap flex">
                      <span
                        class="iconbox-icon-container text-gray-200 text-16 ml-15"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                          height="1em"
                          viewBox="0 0 384 512"
                        >
                          <path
                            d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM144 448c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160c-8.8 0-16 7.2-16 16zM304 64H80V384H304V64z"
                          />
                        </svg>
                      </span>
                    </div>
                    <h3
                              class="text-15 text-black-60 leading-1/5em"
                              style="display: flex"
                            >
                              الهاتف :
                              <div>
                                <span dir="ltr">{{ $general_settings->phone}}</span>
                      <div dir="ltr">{{ $general_settings->phone_2}}</div>
                              </div>
                            </h3>
                  </div>
                </div>
              </div>
              <div class="col col-12 col-md-6 col-lg-5">
                <div
                  class="lqd-contact-form lqd-contact-form-inputs-filled lqd-contact-form-inputs-round lqd-contact-form-button-block lqd-contact-form-button-round mt-1em"
                >
                  <div role="form" class="lqd-cf" lang="en-GB">
                    <div class="screen-reader-response">
                      <p
                        role="status"
                        aria-live="polite"
                        aria-atomic="true"
                      ></p>
                    </div>
                    <form
                      action="{{route('contacts.store')}}"
                      method="post"
                      {{-- class="lqd-cf-form" --}}
                      novalidate="novalidate"
                      data-status="init"
                    >
                    @csrf
                      <p>
                        <span class="lqd-form-control-wrap text">
                          <input
                            type="text"
                            name="name"
                            value=""
                            size="40"
                            class="lqd-cf-form-control px-2em text-13 bg-gray-100 text-slate-300"
                            aria-required="true"
                            aria-invalid="false"
                            placeholder="اسمك"
                          />
                          @error('name')
                           <div class="text text-danger">{{$message}}</div>
                           @enderror
                        </span>
                        <span class="lqd-form-control-wrap">
                          <input
                            type="email"
                            name="email"
                            value=""
                            size="40"
                            class="lqd-cf-form-control px-2em text-13 bg-gray-100 text-slate-300"
                            aria-required="true"
                            aria-invalid="false"
                            placeholder="عنوان بريدك الاليكتروني"
                          />
                          @error('email')
                          <div class="text text-danger">{{$message}}</div>
                          @enderror
                        </span>
                        <span class="lqd-form-control-wrap textarea">
                          <textarea
                            name="message"
                            cols="10"
                            rows="4"
                            class="lqd-cf-form-control px-2em text-13 bg-gray-100 text-slate-300"
                            aria-required="true"
                            aria-invalid="false"
                            placeholder="رسالتك"
                          ></textarea>
                          @error('message')
                          <div class="text text-danger">{{$message}}</div>
                          @enderror
                        </span>
                        <input
                          type="submit"
                          value="إرسال بريد إلكتروني"
                          class="lqd-cf-form-control send-email px-2em text-14 bg-primary text-white"
                        />
                      </p>
                    </form>
                    <div class="lqd-cf-response-output"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="lqd-modal-foot"></div>
    </div>
  </div>