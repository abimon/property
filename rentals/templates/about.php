{% extends 'layout/app.php'%}
{%block content%}
{% load static %}
<!-- banner -->
<style>
  p{
    margin-bottom:2px;
  }
</style>
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="#">Home</a> / About Us</span>
    <h2>About Us</h2>
  </div>
</div>
<div class="container">
  <div class="spacer">
    <div class="row">
      <div class="col-lg-8  col-lg-offset-2">
        <img src="{% static 'images/about.jpg' %}" class="img-responsive thumbnail" alt="realestate">
        <p>We are but a company that collects real estate owners, tenants to offer our diverse services to both. We own no property as a company. By signing up with us you agree with our terms and conditions as stated in the T&C statement.</p>
        <div>
          <h2 style="color:black; font-weight:bolder;">Terms and Conditions</h2>

          <h3>1. Introduction</h3>

          <p >1.1. Urban Link Properties Limited (hereinafter referred to as "the Company") operates as an intermediary between buyers, tenants, landlords, and of real estate properties.</p>
          <p>1.2. These Terms and Conditions govern the use of the Company's services. By engaging the Company, you agree to comply with and be bound by these Terms and Conditions.</p>
          <h3>2. Services Provided</h3>
          <p>2.1. The Company provides services including but not limited to property listing, property viewing arrangements, negotiation facilitation, and documentation assistance.</p>
          <p>2.2. The Company does not own any of the properties listed and acts solely as a link between the parties involved.
          </p>
          <h3>3. Fees and Payment</h3>
          <p>3.1. The Company charges a commission for its services, which is a percentage of the final sale or rental price. The specific percentage will be agreed upon prior to engagement.</p>
          <p>3.2. Payment terms will be outlined in a separate agreement and must be adhered to by the parties involved.</p>
          <p>3.3. All fees are non-refundable except as required by law.</p>
          <h3>4. Obligations of the Parties</h3>

          <p>4.1. Landlords:</p>
          <p>- Provide accurate and truthful information about the property.</p>
          <p>- Ensure the property is available for viewing by potential tenants.</p>
          <p>- Notify the Company promptly of any changes related to the property.</p>

          <p>4.2. Tenants:</p>
          <p>- Provide accurate and truthful information during the application process.</p>
          <p>- Notify the Company promptly of any changes in circumstances that may affect their ability to complete the
            transaction.</p>

          <p>4.3. The Company:</p>
          <p>- Provide accurate information about properties to the best of its knowledge.</p>
          <p>- Facilitate communication and negotiation between the parties.</p>

          <h3>5. Liability</h3>

          <p>5.1. The Company is not responsible for any misrepresentations made by sellers, landlords, buyers, or tenants.</p>
          <p>5.2. The Company is not liable for any loss or damage arising from the use of its services, except where such liability cannot be excluded by law.</p>
          <p>5.3. The Company does not guarantee the completion of any transaction.</p>

          <h3>6. Confidentiality</h3>
          <p>6.1. The Company will keep all personal and financial information confidential, except where disclosure is required by law or with the consent of the party involved.</p>
          <p>6.2. The parties agree not to disclose any confidential information obtained through the Company to any third party, except as required by law.</p>

          <h3>7. Termination</h3>
          <p>7.1. Either party may terminate the engagement with the Company by providing written notice.</p>
          <p>7.2. Termination of the engagement does not affect any accrued rights or obligations of either party.</p>
          <h3>8. Dispute Resolution</h3>
          <p>8.1. In the event of a dispute arising out of or in connection with these Terms and Conditions, the parties agree to attempt to resolve the dispute through negotiation.</p>
          <p>8.2. If the dispute cannot be resolved through negotiation, the parties agree to submit the dispute to mediation before pursuing any other form of dispute resolution.</p>
          <h3>9. Governing Law</h3>
          <p>9.1. These Terms and Conditions are governed by and construed in accordance with the laws of Kenya.</p>
          <p>9.2. Any legal action or proceeding arising under these Terms and Conditions will be brought exclusively in the courts located in Kenya.</p>

          <h3>10. Amendments</h3>
          <p>10.1. The Company reserves the right to amend these Terms and Conditions at any time. Any amendments will be communicated to the parties involved.</p>
          <p>10.2. Continued use of the Company's services after any amendments constitutes acceptance of the new Terms and Conditions.</p>

          <h3>11. Contact Information</h3>
          <p>For any queries or concerns regarding these Terms and Conditions, please contact:
            <span style="font-weight:bold;">
            <br>Urban Link Properties LTD
            <br>+254 701 583 807
            <br>info@urbanproperties.co.ke
            </span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
{%endblock%}