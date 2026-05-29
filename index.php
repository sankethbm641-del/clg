<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            text-align: center;
        }
        
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 2.5em;
        }
        
        .info {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        
        .info p {
            color: #666;
            line-height: 1.8;
            margin: 10px 0;
        }
        
        .code {
            background: #2d2d2d;
            color: #f8f8f2;
            padding: 15px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            margin: 15px 0;
            overflow-x: auto;
            text-align: left;
        }
        
        .features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 20px 0;
        }
        
        .feature {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #667eea;
        }
        
        .feature h3 {
            color: #667eea;
            margin-bottom: 10px;
        }
        
        .feature p {
            font-size: 0.9em;
            color: #666;
        }
        
        .timestamp {
            color: #999;
            font-size: 0.9em;
            margin-top: 20px;
        }
        
        a {
            color: #667eea;
            text-decoration: none;
            font-weight: bold;
        }
        
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎉 Welcome!</h1>
        
        <div class="info">
            <p>Your website is now <strong>live on GitHub Pages</strong>!</p>
            <p>This page was created with PHP and is being served successfully.</p>
        </div>
        
        <div class="features">
            <div class="feature">
                <h3>✨ Dynamic Content</h3>
                <p>Built with PHP for server-side processing</p>
            </div>
            <div class="feature">
                <h3>🚀 Fast Hosting</h3>
                <p>Hosted freely on GitHub Pages</p>
            </div>
            <div class="feature">
                <h3>📱 Responsive Design</h3>
                <p>Works on all devices and screen sizes</p>
            </div>
            <div class="feature">
                <h3>💡 Easy to Customize</h3>
                <p>Edit and update anytime you want</p>
            </div>
        </div>
        
        <div class="info">
            <h3>Server Information</h3>
            <div class="code">
                <?php
                    echo "PHP Version: " . phpversion() . "<br>";
                    echo "Server: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
                    echo "Current Time: " . date('Y-m-d H:i:s') . "<br>";
                    echo "Your IP: " . (isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR']);
                ?>
            </div>
        </div>
        
        <div class="timestamp">
            <p>Page loaded at: <?php echo date('D, M d Y - H:i:s'); ?></p>
            <p><a href="https://github.com/sankethbm641-del/clg" target="_blank">View Repository on GitHub</a></p>
        </div>
    </div>
</body>
</html>
