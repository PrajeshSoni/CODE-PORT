import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
public class SecondServlet extends HttpServlet
{
	public void doGet(HttpServletRequest req,HttpServletResponse res)
	{
		try
		{
			PrintWriter out=res.getWriter();
			HttpSession session=req.getSession(false);
			String n=(String)session.getAttribute("uname");
			out.print("Hello"+n);
			out.close();
		}
		catch(Exception e)
		{
			System.out.println(e);
		}
	}
}