<!doctype html>
<html>

<head>

  <title>fleet</title>

  <meta name="viewport" 
  content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
  <script src="{{asset('public/appdocs/components/platform/platform.js')}}">
  </script>
  <link rel="import" href="{{asset('public/appdocs/components/font-roboto/roboto.html')}}">
  <link rel="import" href="{{asset('public/appdocs/components/core-header-panel/core-header-panel.html')}}">
  <link rel="import" href="{{asset('public/appdocs/components/core-icon-button/core-icon-button.html')}}">
  <link rel="import" href="{{asset('public/appdocs/components/core-icon/core-icon.html')}}">

  <style>
  html,body {
    height: 100%;
    margin: 0;
    background-color: #E5E5E5;
    font-family: 'RobotoDraft', sans-serif;
  }
  .container {
    width: 80%;
    margin: 50px auto;
  }
  @media (min-width: 481px) {
    #tabs {
      width: 200px;
    }
    .container {
      width: 400px;
    }
  }

  html,body {
    height: 100%;
    margin: 0;
    background-color: #E5E5E5;
    font-family: 'RobotoDraft', sans-serif;
  }
  core-header-panel {
    height: 100%;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
  }
  core-toolbar {
    background: #03a9f4;
    color: white;
  }
  </style>

</head>

<body unresolved>
<core-header-panel>

 <core-toolbar class="dark-theme">
     <core-icon-button icon="menu"></core-icon-button>
     <span flex=""><b>FLEET</b></span>
 </core-toolbar>

<core-collapse id="collapse">

</core-collapse>
  <!-- main page content will go here -->

</core-header-panel>
</body>

</html>
