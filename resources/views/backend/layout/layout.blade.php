<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.7
*
-->

<!DOCTYPE html>
<html>
  <head>
    @include('backend.component.head')
  </head>

  <body>
    <div id="wrapper">
      @include('backend.component.sidenav')

      <div id="page-wrapper" class="gray-bg dashbard-1">
        @include('backend.component.nav')
        @include($template)
      </div>
      <div class="small-chat-box fadeInRight animated">
        <div class="heading" draggable="true">
          <small class="chat-date pull-right"> 02.19.2015 </small>
          Small chat
        </div>

        <div class="content">
          <div class="left">
            <div class="author-name">
              Monica Jackson <small class="chat-date"> 10:02 am </small>
            </div>
            <div class="chat-message active">
              Lorem Ipsum is simply dummy text input.
            </div>
          </div>
          <div class="right">
            <div class="author-name">
              Mick Smith
              <small class="chat-date"> 11:24 am </small>
            </div>
            <div class="chat-message">Lorem Ipsum is simpl.</div>
          </div>
          <div class="left">
            <div class="author-name">
              Alice Novak
              <small class="chat-date"> 08:45 pm </small>
            </div>
            <div class="chat-message active">Check this stock char.</div>
          </div>
          <div class="right">
            <div class="author-name">
              Anna Lamson
              <small class="chat-date"> 11:24 am </small>
            </div>
            <div class="chat-message">The standard chunk of Lorem Ipsum</div>
          </div>
          <div class="left">
            <div class="author-name">
              Mick Lane
              <small class="chat-date"> 08:45 pm </small>
            </div>
            <div class="chat-message active">
              I belive that. Lorem Ipsum is simply dummy text.
            </div>
          </div>
        </div>
        <div class="form-chat">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control" />
            <span class="input-group-btn">
              <button class="btn btn-primary" type="button">Send</button>
            </span>
          </div>
        </div>
      </div>
      <div id="small-chat">
        <span class="badge badge-warning pull-right">5</span>
        <a class="open-small-chat">
          <i class="fa fa-comments"></i>
        </a>
      </div>
      
    </div>
    @include('backend.component.script')
  </body>
</html>
