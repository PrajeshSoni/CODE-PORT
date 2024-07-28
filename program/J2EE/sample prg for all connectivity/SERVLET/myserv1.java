import javax.servlet.*;
import java.io.*;
public class myserv1 implements Servlet
{
	ServletConfig cg;
	public void init(ServletConfig config)
	{
		config=cg;
	}
	public void service(ServletRequest req,ServletResponse res)
	{
		try
		{
			PrintWriter pw=res.getWriter();
			pw.println("<h1>TYBCA</h1>");
		}catch(Exception e){}
		
	}
	public void destroy(){}
	public ServletConfig getServletConfig()
	{
		return cg;
	}
	public String getServletInfo()
	{
		String str="This is my first servlet";
		return str;
	}
}