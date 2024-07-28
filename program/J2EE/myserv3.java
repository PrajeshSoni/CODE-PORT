import javax.servlet.*;
import java.io.*;

public class myserv3 implements Servlet
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
			String rno=req.getParameter("t1");
			String nm=req.getParameter("t2");
			String ct=req.getParameter("t3");
			pw.println("Rollno:"+rno);
			pw.println("Name:"+nm);
			pw.println("City:"+ct);
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