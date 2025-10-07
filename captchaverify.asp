<%@LANGUAGE="VBSCRIPT"%>
<%

verify = TestCaptcha("ASPCAPTCHA", Request.QueryString("captchacode"))

response.write verify



function TestCaptcha(byval valSession, byval valCaptcha)
	dim tmpSession
	valSession = Trim(valSession)
	
	valCaptcha = Trim(valCaptcha)
	if (valSession = vbNullString) or (valCaptcha = vbNullString) then
		TestCaptcha = false
		'Response.write(valSession)
	else
		tmpSession = valSession
		valSession = Trim(Session(valSession))
		Session(tmpSession) = vbNullString
		if valSession = vbNullString then
			TestCaptcha = false
		else
			valCaptcha = Replace(valCaptcha,"i","I")

			if StrComp(valSession,valCaptcha,1) = 0 then
				TestCaptcha = true
				'Response.write(valCaptcha)
				'Response.write(TestCaptcha)
			else
				TestCaptcha = false
				'Response.write(valCaptcha)
				'Response.write(TestCaptcha)
			end if
		end if		
	end if
end function
%>