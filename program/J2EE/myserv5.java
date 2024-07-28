import javax.servlet.*;
import java.io.*;

public class myserv5 extends GenericServlet
{
	public void service(ServletRequest req, ServletResponse res)
	{
		try
		{
			PrintWriter pw = res.getWriter();
			pw.println("<h1>Generic Servlet Demo</h1>");
		}
		catch(Exception e){}
	}
}