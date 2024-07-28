import java.io.*;
import javax.servlet.*;
public class serv2 implements Servlet
{
	ServletConfig config;
	public void init(ServletConfig c)
	{
	config=c;
	}
	public void service(ServletRequest req, ServletResponse res)
	{
		try
		{
		PrintWriter out = res.getWriter();
		out.println("<h1>Servlet Interface Demo </h1>");
		}
		catch(Exception e)
		{}
	}
	public void destroy()
	{}
	public ServletConfig getServletConfig()
	{
		return config;
	}
	public String getServletInfo()
	{
		String str="Servlet Info";
		return str;
	}
}