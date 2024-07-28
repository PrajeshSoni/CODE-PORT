import javax.servlet.*;
import java.io.*;
import javax.sql.*;
import java.sql.*;


public class assin4 implements Servlet
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
			String no=req.getParameter(t1);
			
			int no, i;
            pw.println("Enter an integer to find multiplication table: ");
            no = Integer.parseInt();
            for (i = 1; i <= 10; ++i)
            {
               pw.println(no + " * " + i + " = " + no * i);
            }
                
			
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