import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
public class FirstServlet extends HttpServlet
{
	public void doGet(HttpServletRequest req,HttpServletResponse res)
	{
		try
		{
			PrintWriter out=res.getWriter();
			HttpSession session=req.getSession();
			session.setAttribute("uname","Varmora");
			out.println("<a href='SecondServlet'>Go To Next </a>");
			out.close();
		}
		catch(Exception e)
		{
			System.out.println(e);
		}
	}
}