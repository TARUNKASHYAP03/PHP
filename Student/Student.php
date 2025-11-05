<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #6a11cb;
            --secondary: #2575fc;
            --success: #4caf50;
            --danger: #f44336;
            --warning: #ff9800;
            --light: #f8f9fa;
            --dark: #343a40;
            --gray: #6c757d;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #333;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: #fff;
            width: 100%;
            max-width: 700px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
            overflow: hidden;
            animation: fadeIn 0.8s ease-in-out;
        }
        
        .header {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: white;
            padding: 25px 30px;
            text-align: center;
            position: relative;
        }
        
        .header h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
            letter-spacing: 0.5px;
        }
        
        .header p {
            font-size: 15px;
            opacity: 0.9;
        }
        
        .form-container {
            padding: 30px;
        }
        
        .form-section {
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        
        .section-title {
            font-size: 18px;
            color: var(--primary);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            font-weight: 600;
        }
        
        .section-title i {
            margin-right: 10px;
            font-size: 20px;
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border-radius: 10px;
            border: 2px solid #e1e5ee;
            outline: none;
            transition: all 0.3s;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.2);
        }
        
        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 5px;
        }
        
        .radio-option {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .radio-option input {
            margin-right: 8px;
            width: auto;
        }
        
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 25px;
        }
        
        .btn {
            padding: 12px 30px;
            border-radius: 10px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .btn-primary {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: white;
        }
        
        .btn-secondary {
            background: var(--light);
            color: var(--dark);
            border: 1px solid #ddd;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 15px rgba(0,0,0,0.1);
        }
        
        .btn-primary:hover {
            background: linear-gradient(45deg, var(--secondary), var(--primary));
        }
        
        .btn-secondary:hover {
            background: #e9ecef;
        }
        
        .details-container {
            padding: 25px;
            line-height: 1.8;
        }
        
        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        
        .detail-item {
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px dashed #eee;
        }
        
        .detail-label {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 5px;
        }
        
        .detail-value {
            color: var(--dark);
        }
        
        .password-strength {
            margin-top: 5px;
            height: 5px;
            border-radius: 5px;
            background: #eee;
            overflow: hidden;
        }
        
        .password-strength-bar {
            height: 100%;
            width: 0%;
            transition: width 0.3s;
        }
        
        .password-strength-text {
            font-size: 12px;
            margin-top: 5px;
            color: var(--gray);
        }
        
        .validation-message {
            font-size: 12px;
            margin-top: 5px;
            color: var(--danger);
            display: none;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            background: var(--light);
            color: var(--gray);
            font-size: 14px;
        }
        
        .progress-bar {
            height: 5px;
            background: rgba(255,255,255,0.3);
            margin-top: 15px;
            border-radius: 5px;
            overflow: hidden;
        }
        
        .progress {
            height: 100%;
            width: 0%;
            background: white;
            transition: width 0.5s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .details-grid {
                grid-template-columns: 1fr;
            }
            
            .btn-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>Student Registration Portal</h2>
        <p>Complete the form below to register for your course</p>
        <div class="progress-bar">
            <div class="progress" id="form-progress"></div>
        </div>
    </div>
    
    <div class="form-container" id="registration-form">
        <form method="post" id="studentForm">
            <div class="form-section">
                <div class="section-title">
                    <i class="fas fa-user-graduate"></i>
                    Personal Information
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="student_name">Full Name *</label>
                        <input type="text" id="student_name" name="student_name" class="form-control" required>
                        <div class="validation-message" id="name-validation">Please enter a valid name</div>
                    </div>
                    <div class="form-group">
                        <label for="course">Course *</label>
                        <select id="course" name="course" class="form-control" required>
                            <option value="">Select a course</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Business Administration">Business Administration</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Medicine">Medicine</option>
                            <option value="Arts & Humanities">Arts & Humanities</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="form-section">
                <div class="section-title">
                    <i class="fas fa-users"></i>
                    Family Information
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="father_name">Father's Name *</label>
                        <input type="text" id="father_name" name="father_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="mother_name">Mother's Name *</label>
                        <input type="text" id="mother_name" name="mother_name" class="form-control" required>
                    </div>
                </div>
            </div>
            
            <div class="form-section">
                <div class="section-title">
                    <i class="fas fa-id-card"></i>
                    Personal Details
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="dob">Date of Birth *</label>
                        <input type="date" id="dob" name="dob" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Gender *</label>
                        <div class="radio-group">
                            <div class="radio-option">
                                <input type="radio" id="male" name="gender" value="Male" required>
                                <label for="male">Male</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="female" name="gender" value="Female">
                                <label for="female">Female</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="other" name="gender" value="Other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-section">
                <div class="section-title">
                    <i class="fas fa-address-book"></i>
                    Contact Information
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="email">Email ID *</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                        <div class="validation-message" id="email-validation">Please enter a valid email address</div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" maxlength="10" class="form-control" required>
                        <div class="validation-message" id="phone-validation">Please enter a valid 10-digit phone number</div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address *</label>
                    <textarea id="address" name="address" rows="3" class="form-control" required></textarea>
                </div>
            </div>
            
            <div class="form-section">
                <div class="section-title">
                    <i class="fas fa-lock"></i>
                    Account Security
                </div>
                <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                    <div class="password-strength">
                        <div class="password-strength-bar" id="password-strength-bar"></div>
                    </div>
                    <div class="password-strength-text" id="password-strength-text">Password strength</div>
                    <div class="validation-message" id="password-validation">Password must be at least 8 characters with uppercase, lowercase, and number</div>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password *</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                    <div class="validation-message" id="confirm-validation">Passwords do not match</div>
                </div>
            </div>
            
            <div class="btn-container">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i> Submit Registration
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="fas fa-redo"></i> Reset Form
                </button>
            </div>
        </form>
    </div>
    
    <div class="details-container" id="confirmation-page" style="display: none;">
        <h2 style="color: var(--primary); margin-bottom: 20px; text-align: center;">
            <i class="fas fa-check-circle" style="color: var(--success);"></i> Registration Successful!
        </h2>
        <p style="text-align: center; margin-bottom: 25px; color: var(--gray);">
            Thank you for registering. Your details have been submitted successfully.
        </p>
        
        <div class="section-title" style="justify-content: center;">
            <i class="fas fa-user-check"></i>
            Your Registration Details
        </div>
        
        <div class="details-grid" id="details-display">
            <!-- Details will be populated by JavaScript -->
        </div>
        
        <div class="btn-container">
            <button class="btn btn-primary" id="back-to-form">
                <i class="fas fa-edit"></i> Edit Registration
            </button>
            <button class="btn btn-secondary" id="print-details">
                <i class="fas fa-print"></i> Print Details
            </button>
        </div>
    </div>
    
    <footer>
        © <span id="current-year"></span> Student Registration Portal | Designed by Tarun
    </footer>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set current year in footer
        document.getElementById('current-year').textContent = new Date().getFullYear();
        
        const form = document.getElementById('studentForm');
        const registrationForm = document.getElementById('registration-form');
        const confirmationPage = document.getElementById('confirmation-page');
        const detailsDisplay = document.getElementById('details-display');
        const backToFormBtn = document.getElementById('back-to-form');
        const printBtn = document.getElementById('print-details');
        const progressBar = document.getElementById('form-progress');
        
        // Form validation
        const nameInput = document.getElementById('student_name');
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirm_password');
        
        // Real-time validation
        nameInput.addEventListener('input', validateName);
        emailInput.addEventListener('input', validateEmail);
        phoneInput.addEventListener('input', validatePhone);
        passwordInput.addEventListener('input', validatePassword);
        confirmPasswordInput.addEventListener('input', validateConfirmPassword);
        
        // Password strength indicator
        passwordInput.addEventListener('input', updatePasswordStrength);
        
        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (validateForm()) {
                showConfirmation();
            }
        });
        
        // Back to form button
        backToFormBtn.addEventListener('click', function() {
            confirmationPage.style.display = 'none';
            registrationForm.style.display = 'block';
            progressBar.style.width = '0%';
        });
        
        // Print button
        printBtn.addEventListener('click', function() {
            window.print();
        });
        
        // Update progress bar as user fills the form
        const formInputs = form.querySelectorAll('input, select, textarea');
        formInputs.forEach(input => {
            input.addEventListener('input', updateProgressBar);
        });
        
        function validateName() {
            const nameValue = nameInput.value.trim();
            const nameValidation = document.getElementById('name-validation');
            
            if (nameValue.length < 2) {
                showValidationError(nameInput, nameValidation, 'Name must be at least 2 characters');
                return false;
            } else {
                hideValidationError(nameInput, nameValidation);
                return true;
            }
        }
        
        function validateEmail() {
            const emailValue = emailInput.value.trim();
            const emailValidation = document.getElementById('email-validation');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (!emailRegex.test(emailValue)) {
                showValidationError(emailInput, emailValidation, 'Please enter a valid email address');
                return false;
            } else {
                hideValidationError(emailInput, emailValidation);
                return true;
            }
        }
        
        function validatePhone() {
            const phoneValue = phoneInput.value.trim();
            const phoneValidation = document.getElementById('phone-validation');
            const phoneRegex = /^\d{10}$/;
            
            if (!phoneRegex.test(phoneValue)) {
                showValidationError(phoneInput, phoneValidation, 'Please enter a valid 10-digit phone number');
                return false;
            } else {
                hideValidationError(phoneInput, phoneValidation);
                return true;
            }
        }
        
        function validatePassword() {
            const passwordValue = passwordInput.value;
            const passwordValidation = document.getElementById('password-validation');
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
            
            if (!passwordRegex.test(passwordValue)) {
                showValidationError(passwordInput, passwordValidation, 
                    'Password must be at least 8 characters with uppercase, lowercase, and number');
                return false;
            } else {
                hideValidationError(passwordInput, passwordValidation);
                return true;
            }
        }
        
        function validateConfirmPassword() {
            const passwordValue = passwordInput.value;
            const confirmValue = confirmPasswordInput.value;
            const confirmValidation = document.getElementById('confirm-validation');
            
            if (passwordValue !== confirmValue) {
                showValidationError(confirmPasswordInput, confirmValidation, 'Passwords do not match');
                return false;
            } else {
                hideValidationError(confirmPasswordInput, confirmValidation);
                return true;
            }
        }
        
        function validateForm() {
            const isNameValid = validateName();
            const isEmailValid = validateEmail();
            const isPhoneValid = validatePhone();
            const isPasswordValid = validatePassword();
            const isConfirmValid = validateConfirmPassword();
            
            return isNameValid && isEmailValid && isPhoneValid && isPasswordValid && isConfirmValid;
        }
        
        function showValidationError(input, validationElement, message) {
            input.style.borderColor = 'var(--danger)';
            validationElement.textContent = message;
            validationElement.style.display = 'block';
        }
        
        function hideValidationError(input, validationElement) {
            input.style.borderColor = '#e1e5ee';
            validationElement.style.display = 'none';
        }
        
        function updatePasswordStrength() {
            const password = passwordInput.value;
            const strengthBar = document.getElementById('password-strength-bar');
            const strengthText = document.getElementById('password-strength-text');
            
            let strength = 0;
            let color = 'var(--danger)';
            let text = 'Very Weak';
            
            if (password.length >= 8) strength += 25;
            if (/[a-z]/.test(password)) strength += 25;
            if (/[A-Z]/.test(password)) strength += 25;
            if (/[0-9]/.test(password)) strength += 25;
            
            strengthBar.style.width = strength + '%';
            
            if (strength >= 75) {
                color = 'var(--success)';
                text = 'Strong';
            } else if (strength >= 50) {
                color = 'var(--warning)';
                text = 'Medium';
            } else if (strength >= 25) {
                color = 'var(--danger)';
                text = 'Weak';
            }
            
            strengthBar.style.background = color;
            strengthText.textContent = `Password Strength: ${text}`;
            strengthText.style.color = color;
        }
        
        function updateProgressBar() {
            const totalFields = formInputs.length;
            let filledFields = 0;
            
            formInputs.forEach(input => {
                if (input.type === 'radio' || input.type === 'checkbox') {
                    if (input.checked) filledFields++;
                } else if (input.value.trim() !== '') {
                    filledFields++;
                }
            });
            
            const progress = (filledFields / totalFields) * 100;
            progressBar.style.width = progress + '%';
        }
        
        function showConfirmation() {
            // Collect form data
            const formData = new FormData(form);
            const details = {};
            
            for (const [key, value] of formData.entries()) {
                details[key] = value;
            }
            
            // Hide form and show confirmation
            registrationForm.style.display = 'none';
            confirmationPage.style.display = 'block';
            
            // Display details
            detailsDisplay.innerHTML = '';
            
            const fields = [
                { label: 'Full Name', key: 'student_name', icon: 'user' },
                { label: 'Course', key: 'course', icon: 'book' },
                { label: "Father's Name", key: 'father_name', icon: 'male' },
                { label: "Mother's Name", key: 'mother_name', icon: 'female' },
                { label: 'Date of Birth', key: 'dob', icon: 'calendar' },
                { label: 'Gender', key: 'gender', icon: 'venus-mars' },
                { label: 'Email', key: 'email', icon: 'envelope' },
                { label: 'Phone', key: 'phone', icon: 'phone' },
                { label: 'Address', key: 'address', icon: 'home' }
            ];
            
            fields.forEach(field => {
                const detailItem = document.createElement('div');
                detailItem.className = 'detail-item';
                
                detailItem.innerHTML = `
                    <div class="detail-label">
                        <i class="fas fa-${field.icon}"></i> ${field.label}
                    </div>
                    <div class="detail-value">${details[field.key] || 'Not provided'}</div>
                `;
                
                detailsDisplay.appendChild(detailItem);
            });
        }
    });
</script>
</body>
</html>