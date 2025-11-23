<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - The Modern POS Solution</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="navbar">
        <div class="container nav-container">
            <a href="#" class="logo">QuickPOS</a>

            <ul class="nav-links">
                <li><a href="#features">Features</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <div class="nav-btn">
                <a href="#" class="btn-signup">Sign Up</a>
            </div>
        </div>
    </nav>

     <header class="hero">
        <div class="container hero-container">
            <div class="hero-text">
                <h1>The Last POS System You'll Ever Need</h1>
                <p>Streamline your sales, manage inventory, and grow your business with QuickPOS.</p>
                <a href="#pricing" class="btn-primary">Get Started for Free</a>
            </div>
            <div class="hero-image">
                <img src="images/pos.png" alt="POS Software Dashboard">
            </div>
        </div>
    </header>
    <section id="features" class="features">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose QuickPOS?</h2>
                <p>Everything you need to run your store efficiently.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="icon">📦</div>
                    <h3>Inventory Management</h3>
                    <p>Track stock in real-time and get low-stock alerts automatically.</p>
                </div>
                <div class="feature-card">
                    <div class="icon">📊</div>
                    <h3>Sales Analytics</h3>
                    <p>Visualize your sales data and understand your customers better.</p>
                </div>
                <div class="feature-card">
                    <div class="icon">🔌</div>
                    <h3>Easy Integration</h3>
                    <p>Connect seamlessly with your existing accounting and payment tools.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="section-header">
                <h2>Simple Pricing</h2>
                <p>Choose the plan that fits your business scale.</p>
            </div>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <h3>Basic</h3>
                    <div class="price">$29<span>/mo</span></div>
                    <ul class="features-list">
                        <li>1 Register</li>
                        <li>Basic Reporting</li>
                        <li>Email Support</li>
                    </ul>
                    <a href="#" class="btn-outline">Choose Basic</a>
                </div>
                <div class="pricing-card popular">
                    <div class="badge">Most Popular</div>
                    <h3>Pro</h3>
                    <div class="price">$79<span>/mo</span></div>
                    <ul class="features-list">
                        <li>3 Registers</li>
                        <li>Advanced Analytics</li>
                        <li>24/7 Support</li>
                    </ul>
                    <a href="#" class="btn-primary">Choose Pro</a>
                </div>
                <div class="pricing-card">
                    <h3>Enterprise</h3>
                    <div class="price">Custom</div>
                    <ul class="features-list">
                        <li>Unlimited Registers</li>
                        <li>API Access</li>
                        <li>Dedicated Account Manager</li>
                    </ul>
                    <a href="#" class="btn-outline">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>
     <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Get in Touch</h2>
                <p>Have questions? We'd love to hear from you.</p>
            </div>
            
            <div class="contact-wrapper">
                <div class="form-header">
                    <h3>Send us a Message</h3>
                    <p>Our team typically replies within 2 hours.</p>
                </div>

                <form action="contact_process.php" method="POST" class="contact-form">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="Ex. John Doe" required minlength="2">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="name@company.com" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">How can we help?</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tell us about your project or question..." required minlength="10"></textarea>
                    </div>

                    <button type="submit" class="btn-primary btn-block">
                        Send Message 
                        <span style="margin-left:8px">→</span>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-col">
                <h4>QuickPOS</h4>
                <p>Making business simple since 2025.</p>
            </div>
            <div class="footer-col">
                <h4>Links</h4>
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Socials</h4>
                <div class="social-links">
                    <a href="#">Twitter</a>
                    <a href="#">LinkedIn</a>
                    <a href="#">Facebook</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 QuickPOS. All rights reserved.</p>
        </div>
    </footer>
    </body>
</html>