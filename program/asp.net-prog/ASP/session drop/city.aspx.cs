﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class city : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        string g;
        g = Session["state"].ToString();
        if (g == "gujarat")
        {
            Response.Write("Snagar");
        }
        else if (g == "up")
        {
            Response.Write("Bhopal");
        }
        else
        {
            Response.Write("jaipur");
        }
    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        Response.Redirect("Default.aspx");
    }
}