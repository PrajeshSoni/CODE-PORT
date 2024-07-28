import javax.servlet.*;
import java.io.*;

public class myserv2 implements Servlet
{
	ServletConfig cg;
	public void init(ServletConfig config)
	{
		config=cg;
	}
	public void service(ServletRequest req, ServletResponse res)
	{
		try
		{
			PrintWriter pw = res.getWriter();
			pw.println("<form action='myserv3' method='POST'>");
			pw.println("<center><h1>Student Registration</h1><hr>");
			pw.println("Enter Rollno<input type=text name=t1><br>");
			pw.println("Enter Name<input type=text name=t2><br>");
			pw.println("Enter City<input type=text name=t3><br>");
			pw.println("<input type =submit value=save>");
			pw.println("<input type =reset value=cancel>");
		}
		catch(Exception e){}
	}
	public void destroy(){}
	public ServletConfig getServletConfig()
	{
		return cg;
	}
	public String getServletInfo()
	{
		String str = "This is my servlet";
		return str;
	}
}