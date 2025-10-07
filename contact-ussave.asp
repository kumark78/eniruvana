<!-- include file="./common/connection.asp" -->
<%
  postapply=request.form("postapply")
  'applydate=dtformatrev2(Date())
  'response.write applydate
  'response.end
  ser=request.form("ser")
  serv=request.form("serv")
  name=request.form("nam")
  cname=request.form("cname")
  email=request.form("emailid")
  address=request.form("address")
  phone=request.form("phone")
  require=request.form("requir")
  'uploadresume=request.form("uploadresume")
  'HLink = "<a href='http://localhost/vech/downloadin.asp?filename=./careers/"&uploadresume&"' class='copy'>"&uploadresume&"</a>"
  'HLink = "'"&Server.MapPath("./careers/doct/"&uploadresume)&"'"
  'response.write HLink
  'response.end
	
%> 

<%
  'con.execute "Insert into en_enqu (enqser,enqserv,enqname,enqcname,enqemail,enqaddrs,enqpno,enqrequ) values ('"&postapply&"','"&applydate&"','"&name&"','"&email&"','"&address&"','"&phonumber&"','"&uploadresume&"')"
  'fromwho = "shriram@yahoo.com"
  'towho = email
  dim bodystr
  bodystr="<style>.scopy{font-family:arial;font-style: normal;font-size:12px;font-weight:normal;color: #2AB529;}</style><table cellpadding='5' cellspacing='2' border='0' width='500' align='center' bgcolor='#67E164'><tr bgcolor='#ffffff'><td colspan='2' class='scopy'><img src='http://www.eniruvana.com/newsite/images/enlogo.png' align='center'><br></td></tr>"
  if ser<>"" then
  bodystr=bodystr+"<tr bgcolor='#ffffff'><td class='scopy'><b>Enquired for the Service</b></td><td class='scopy'>"& ser &"</td></tr>"
  else
  bodystr=bodystr+"<tr bgcolor='#ffffff'><td class='scopy'><b>Enquired for the Service</b></td><td class='scopy'>"& serv &"</td></tr>"
  end if
  bodystr=bodystr+"<tr bgcolor='#ffffff'><td width='150' class='scopy'><b>Name </b></td><td width='350' class='scopy'>"& name &"</td></tr>"
  bodystr=bodystr+"<tr bgcolor='#ffffff'><td class='scopy'><b>Email</b></td><td class='scopy'>"& email &"</td></tr>"
  bodystr=bodystr+"<tr bgcolor='#ffffff'><td class='scopy'><b>Address </b></td><td class='scopy'>"& address &"</td></tr>"
  bodystr=bodystr+"<tr bgcolor='#ffffff'><td class='scopy'><b>Phone</b></td><td class='scopy'>"& phone &"</td></tr>"
  bodystr=bodystr+"<tr bgcolor='#ffffff'><td class='scopy'><b>Requirement </b></td><td class='scopy'>"&require&"</td></tr></table>"
  'response.write bodystr
  'response.end
%> 

<%
  'Set myMail=CreateObject("CDO.Message")
'myMail.Subject="Vasan Eye Care Hospital - Careers"
'myMail.From=email
'myMail.To="shriram.nagarajan@vasaneye.in"
'myMail.HTMLBody = bodystr
'myMail.AddAttachment=Server.MapPath("./careers/doct/"&uploadresume)
'myMail.Configuration.Fields.Item _
'("http://schemas.microsoft.com/cdo/configuration/sendusing")=2
'Name or IP of remote SMTP server
'myMail.Configuration.Fields.Item _
'("http://schemas.microsoft.com/cdo/configuration/smtpserver")="220.226.4.14"
'Server port
'myMail.Configuration.Fields.Item _
'("http://schemas.microsoft.com/cdo/configuration/smtpserverport")=25
'myMail.Configuration.Fields.Update
'myMail.Send
'set myMail=nothing
  
Set oMail = Server.CreateObject("CDO.Message") 
Set oMailConfig = Server.CreateObject ("CDO.Configuration") 
 
oMailConfig.Fields("http://schemas.microsoft.com/cdo/configuration/smtpserver") = "webmail.eniruvana.com" 
oMailConfig.Fields("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = 25 
oMailConfig.Fields("http://schemas.microsoft.com/cdo/configuration/smtpusessl") = false
oMailConfig.Fields("http://schemas.microsoft.com/cdo/configuration/sendusing") = 2 
oMailConfig.Fields("http://schemas.microsoft.com/cdo/configuration/smtpauthenticate") = 1
oMailConfig.Fields("http://schemas.microsoft.com/cdo/configuration/sendusername") ="sales@eniruvana.com"
oMailConfig.Fields("http://schemas.microsoft.com/cdo/configuration/sendpassword") ="lUf7%b68"
oMailConfig.Fields("http://schemas.microsoft.com/cdo/configuration/smtpconnectiontimeout") = 60 
oMailConfig.Fields.Update 
 
Set oMail.Configuration = oMailConfig 
'response.write email
'response.end
oMail.From = email
oMail.To = "sales@eniruvana.com"
'oMail.Cc="shriramrnr@gmail.com"
oMail.Subject = "eniruvana - Contact Us"
oMail.HTMLBody = bodystr
'if trim(uploadresume) <> "" then oMail.AddAttachment Server.MapPath("./careers/doct/"&uploadresume)
oMail.Send
Set oMail = Nothing 
Set oMailConfig = Nothing
%>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
<!--
  alert("Thank you for your interest. One of our Representative will get in touch with you shortly. Thank you for your support"); 
  document.location = "contactus.asp";
  
//-->
</SCRIPT>
