  <h1 class="h3 mb-2 text-gray-800" style="font-size: 25px">Tenan</h1>

  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">Data Profile</label>

  <input id="tab2" type="radio" name="tabs">
  <label for="tab2">Dribbble</label>

  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">Dropbox</label>

  <input id="tab4" type="radio" name="tabs">
  <label for="tab4">Drupal</label>

  <style>
      main {
          min-width: 320px;
          max-width: 800px;
          padding: 50px;
          margin: 0 auto;
          background: #fff;
      }

      section {
          display: none;
          padding: 20px 0 0;
          border-top: 1px solid #ddd;
      }

      input {
          display: none;
      }

      label {
          display: inline-block;
          margin: 0 0 -1px;
          padding: 15px 25px;
          font-weight: 600;
          text-align: center;
          color: #bbb;
          border: 1px solid transparent;
      }

      label:before {
          font-family: fontawesome;
          font-weight: normal;
          margin-right: 10px;
      }

      label[for*='1']:before {
          content: '\f1cb';
      }

      label[for*='2']:before {
          content: '\f17d';
      }

      label[for*='3']:before {
          content: '\f16b';
      }

      label[for*='4']:before {
          content: '\f1a9';
      }

      label:hover {
          color: #888;
          cursor: pointer;
      }

      input:checked+label {
          color: #555;
          border: 1px solid #ddd;
          border-top: 2px solid orange;
          border-bottom: 1px solid #fff;
      }

      #tab1:checked~#content1,
      #tab2:checked~#content2,
      #tab3:checked~#content3,
      #tab4:checked~#content4 {
          display: block;
      }

      @media screen and (max-width: 650px) {
          label {
              font-size: 0;
          }

          label:before {
              margin: 0;
              font-size: 18px;
          }
      }

      @media screen and (max-width: 400px) {
          label {
              padding: 15px;
          }
      }
  </style>
