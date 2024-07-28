import javax.servlet.*;
import java.io.*;

public class assin4form implements Servlet
{
	ServletConfig cg;
	public void init(ServletConfig config)
	{
		config=cg;
	}
	public void service(ServletRequest req,ServletResponsr res)
	{
		try{
			PrintWriter pw=res.getWriter();
			pw.println(<"form action='assin4' method='POST'>");
			pw.println("Enter No<input type=text name=t1><br>");
			pw.println("<input type=submit value=save>");
			pw.println("</form>");
		}catch (Exception e){}
		public void destroy(){}
		public ServletConfig getServletConfig()
		{
			return cg;
		}
		public String getServletInfo()
		{
			String str="This is my first Servlet";
			return str;
		}
	}
}