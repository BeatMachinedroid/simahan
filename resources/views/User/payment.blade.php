<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SET_YOUR_CLIENT_KEY_HERE"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  </head>

  <body>
    <script type="text/javascript">
        // Get the Snap token from the session
        var snapToken = "{{ $snapToken }}";

        // Check if Snap token is available
        if (snapToken) {
            // Automatically trigger Snap payment popup
            window.snap.pay(snapToken);
        } else {
            console.error('Snap token not found.');
        }
     </script>
  </body>
</html>
